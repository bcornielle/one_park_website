<?php

/*
 * This file is part of the Predis package.
 *
 * (c) Daniele Alessandri <suppakilla@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__.'/shared.php';

// This example will not work with versions of Redis < 2.6.
//
// Additionally to the EVAL command defined in the current development profile,
// the Predis\Command\ScriptCommand class can be used to build an higher level
// abstraction for "scriptable" commands so that they will appear just like any
// other command on the client-side. This is a quick example used to implement
// INCREX.

use Predis\Command\ScriptCommand;

class IncrementExistingKeysBy extends ScriptCommand
{
    public function getKeysCount()
    {
        // Tell Predis to use all the arguments but the last one as arguments
        // for KEYS. The last one will be used to populate ARGV.
        return -1;
    }

    public function getScript()
    {
        return <<<LUA
local cmd, insert = redis.call, table.insert
local increment, results = ARGV[1], { }

for idx, key in ipairs(KEYS) do
  if cmd('exists', key) == 1 then
    insert(results, idx, cmd('incrby', key, increment))
  else
    insert(results, idx, false)
  end
end

return results
LUA;
    }
}

$client = new Predis\Client($single_server, array(
    'profile' => function ($options) {
        $profile = $options->getDefault('profile');
        $profile->defineCommand('increxby', 'IncrementExistingKeysBy');

        return $profile;
    },
));

$client->mset('foo', 10, 'foobar', 100);

var_export($client->increxby('foo', 'foofoo', 'foobar', 50));

/*
array (
  0 => 60,
  1 => NULL,
  2 => 150,
)
*/
