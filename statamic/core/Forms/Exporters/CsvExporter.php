<?php

namespace Statamic\Forms\Exporters;

use SplTempFileObject;
use League\Csv\Writer;

class CsvExporter extends AbstractExporter
{
    /**
     * @var Writer
     */
    private $writer;

    /**
     * Create a new CsvExporter
     */
    public function __construct()
    {
        $this->writer = Writer::createFromFileObject(new SplTempFileObject);
    }

    /**
     * Perform the export
     *
     * @return string
     */
    public function export()
    {
        $this->insertHeaders();

        $this->insertData();

        return (string) $this->writer;
    }

    /**
     * Insert the headers into the CSV
     */
    private function insertHeaders()
    {
        $headers = array_keys($this->form()->fields());

        $headers[] = 'date';

        $this->writer->insertOne($headers);
    }

    /**
     * Insert the submission data into the CSV
     */
    private function insertData()
    {
        $data = $this->form()->submissions()->map(function ($submission) {
            $submission = $submission->toArray();

            $submission['date'] = (string) $submission['date'];

            unset($submission['id']);

            return collect($submission)->map(function ($value) {
                $value = (is_array($value)) ? join(', ', $value) : $value;

                return html_entity_decode($value);
            })->all();
        })->all();

        $this->writer->insertAll($data);
    }
}
