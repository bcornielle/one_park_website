<?php
// This file was auto-generated from sdk-root/src/data/polly/2016-06-10/api-2.json
return [ 'version' => '2.0', 'metadata' => [ 'apiVersion' => '2016-06-10', 'endpointPrefix' => 'polly', 'protocol' => 'rest-json', 'serviceFullName' => 'Amazon Polly', 'serviceId' => 'Polly', 'signatureVersion' => 'v4', 'uid' => 'polly-2016-06-10', ], 'operations' => [ 'DeleteLexicon' => [ 'name' => 'DeleteLexicon', 'http' => [ 'method' => 'DELETE', 'requestUri' => '/v1/lexicons/{LexiconName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DeleteLexiconInput', ], 'output' => [ 'shape' => 'DeleteLexiconOutput', ], 'errors' => [ [ 'shape' => 'LexiconNotFoundException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'DescribeVoices' => [ 'name' => 'DescribeVoices', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/voices', 'responseCode' => 200, ], 'input' => [ 'shape' => 'DescribeVoicesInput', ], 'output' => [ 'shape' => 'DescribeVoicesOutput', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'GetLexicon' => [ 'name' => 'GetLexicon', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/lexicons/{LexiconName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetLexiconInput', ], 'output' => [ 'shape' => 'GetLexiconOutput', ], 'errors' => [ [ 'shape' => 'LexiconNotFoundException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'GetSpeechSynthesisTask' => [ 'name' => 'GetSpeechSynthesisTask', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/synthesisTasks/{TaskId}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'GetSpeechSynthesisTaskInput', ], 'output' => [ 'shape' => 'GetSpeechSynthesisTaskOutput', ], 'errors' => [ [ 'shape' => 'InvalidTaskIdException', ], [ 'shape' => 'ServiceFailureException', ], [ 'shape' => 'SynthesisTaskNotFoundException', ], ], ], 'ListLexicons' => [ 'name' => 'ListLexicons', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/lexicons', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListLexiconsInput', ], 'output' => [ 'shape' => 'ListLexiconsOutput', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'ListSpeechSynthesisTasks' => [ 'name' => 'ListSpeechSynthesisTasks', 'http' => [ 'method' => 'GET', 'requestUri' => '/v1/synthesisTasks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'ListSpeechSynthesisTasksInput', ], 'output' => [ 'shape' => 'ListSpeechSynthesisTasksOutput', ], 'errors' => [ [ 'shape' => 'InvalidNextTokenException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'PutLexicon' => [ 'name' => 'PutLexicon', 'http' => [ 'method' => 'PUT', 'requestUri' => '/v1/lexicons/{LexiconName}', 'responseCode' => 200, ], 'input' => [ 'shape' => 'PutLexiconInput', ], 'output' => [ 'shape' => 'PutLexiconOutput', ], 'errors' => [ [ 'shape' => 'InvalidLexiconException', ], [ 'shape' => 'UnsupportedPlsAlphabetException', ], [ 'shape' => 'UnsupportedPlsLanguageException', ], [ 'shape' => 'LexiconSizeExceededException', ], [ 'shape' => 'MaxLexemeLengthExceededException', ], [ 'shape' => 'MaxLexiconsNumberExceededException', ], [ 'shape' => 'ServiceFailureException', ], ], ], 'StartSpeechSynthesisTask' => [ 'name' => 'StartSpeechSynthesisTask', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/synthesisTasks', 'responseCode' => 200, ], 'input' => [ 'shape' => 'StartSpeechSynthesisTaskInput', ], 'output' => [ 'shape' => 'StartSpeechSynthesisTaskOutput', ], 'errors' => [ [ 'shape' => 'TextLengthExceededException', ], [ 'shape' => 'InvalidS3BucketException', ], [ 'shape' => 'InvalidS3KeyException', ], [ 'shape' => 'InvalidSampleRateException', ], [ 'shape' => 'InvalidSnsTopicArnException', ], [ 'shape' => 'InvalidSsmlException', ], [ 'shape' => 'LexiconNotFoundException', ], [ 'shape' => 'ServiceFailureException', ], [ 'shape' => 'MarksNotSupportedForFormatException', ], [ 'shape' => 'SsmlMarksNotSupportedForTextTypeException', ], [ 'shape' => 'LanguageNotSupportedException', ], ], ], 'SynthesizeSpeech' => [ 'name' => 'SynthesizeSpeech', 'http' => [ 'method' => 'POST', 'requestUri' => '/v1/speech', 'responseCode' => 200, ], 'input' => [ 'shape' => 'SynthesizeSpeechInput', ], 'output' => [ 'shape' => 'SynthesizeSpeechOutput', ], 'errors' => [ [ 'shape' => 'TextLengthExceededException', ], [ 'shape' => 'InvalidSampleRateException', ], [ 'shape' => 'InvalidSsmlException', ], [ 'shape' => 'LexiconNotFoundException', ], [ 'shape' => 'ServiceFailureException', ], [ 'shape' => 'MarksNotSupportedForFormatException', ], [ 'shape' => 'SsmlMarksNotSupportedForTextTypeException', ], [ 'shape' => 'LanguageNotSupportedException', ], ], ], ], 'shapes' => [ 'Alphabet' => [ 'type' => 'string', ], 'AudioStream' => [ 'type' => 'blob', 'streaming' => true, ], 'ContentType' => [ 'type' => 'string', ], 'DateTime' => [ 'type' => 'timestamp', ], 'DeleteLexiconInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'LexiconName', 'location' => 'uri', 'locationName' => 'LexiconName', ], ], ], 'DeleteLexiconOutput' => [ 'type' => 'structure', 'members' => [], ], 'DescribeVoicesInput' => [ 'type' => 'structure', 'members' => [ 'LanguageCode' => [ 'shape' => 'LanguageCode', 'location' => 'querystring', 'locationName' => 'LanguageCode', ], 'IncludeAdditionalLanguageCodes' => [ 'shape' => 'IncludeAdditionalLanguageCodes', 'location' => 'querystring', 'locationName' => 'IncludeAdditionalLanguageCodes', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'DescribeVoicesOutput' => [ 'type' => 'structure', 'members' => [ 'Voices' => [ 'shape' => 'VoiceList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ErrorMessage' => [ 'type' => 'string', ], 'Gender' => [ 'type' => 'string', 'enum' => [ 'Female', 'Male', ], ], 'GetLexiconInput' => [ 'type' => 'structure', 'required' => [ 'Name', ], 'members' => [ 'Name' => [ 'shape' => 'LexiconName', 'location' => 'uri', 'locationName' => 'LexiconName', ], ], ], 'GetLexiconOutput' => [ 'type' => 'structure', 'members' => [ 'Lexicon' => [ 'shape' => 'Lexicon', ], 'LexiconAttributes' => [ 'shape' => 'LexiconAttributes', ], ], ], 'GetSpeechSynthesisTaskInput' => [ 'type' => 'structure', 'required' => [ 'TaskId', ], 'members' => [ 'TaskId' => [ 'shape' => 'TaskId', 'location' => 'uri', 'locationName' => 'TaskId', ], ], ], 'GetSpeechSynthesisTaskOutput' => [ 'type' => 'structure', 'members' => [ 'SynthesisTask' => [ 'shape' => 'SynthesisTask', ], ], ], 'IncludeAdditionalLanguageCodes' => [ 'type' => 'boolean', ], 'InvalidLexiconException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidNextTokenException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidS3BucketException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidS3KeyException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidSampleRateException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidSnsTopicArnException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidSsmlException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'InvalidTaskIdException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'LanguageCode' => [ 'type' => 'string', 'enum' => [ 'arb', 'cmn-CN', 'cy-GB', 'da-DK', 'de-DE', 'en-AU', 'en-GB', 'en-GB-WLS', 'en-IN', 'en-US', 'es-ES', 'es-MX', 'es-US', 'fr-CA', 'fr-FR', 'is-IS', 'it-IT', 'ja-JP', 'hi-IN', 'ko-KR', 'nb-NO', 'nl-NL', 'pl-PL', 'pt-BR', 'pt-PT', 'ro-RO', 'ru-RU', 'sv-SE', 'tr-TR', ], ], 'LanguageCodeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LanguageCode', ], ], 'LanguageName' => [ 'type' => 'string', ], 'LanguageNotSupportedException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'LastModified' => [ 'type' => 'timestamp', ], 'LexemesCount' => [ 'type' => 'integer', ], 'Lexicon' => [ 'type' => 'structure', 'members' => [ 'Content' => [ 'shape' => 'LexiconContent', ], 'Name' => [ 'shape' => 'LexiconName', ], ], ], 'LexiconArn' => [ 'type' => 'string', ], 'LexiconAttributes' => [ 'type' => 'structure', 'members' => [ 'Alphabet' => [ 'shape' => 'Alphabet', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LastModified' => [ 'shape' => 'LastModified', ], 'LexiconArn' => [ 'shape' => 'LexiconArn', ], 'LexemesCount' => [ 'shape' => 'LexemesCount', ], 'Size' => [ 'shape' => 'Size', ], ], ], 'LexiconContent' => [ 'type' => 'string', ], 'LexiconDescription' => [ 'type' => 'structure', 'members' => [ 'Name' => [ 'shape' => 'LexiconName', ], 'Attributes' => [ 'shape' => 'LexiconAttributes', ], ], ], 'LexiconDescriptionList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LexiconDescription', ], ], 'LexiconName' => [ 'type' => 'string', 'pattern' => '[0-9A-Za-z]{1,20}', 'sensitive' => true, ], 'LexiconNameList' => [ 'type' => 'list', 'member' => [ 'shape' => 'LexiconName', ], 'max' => 5, ], 'LexiconNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 404, ], 'exception' => true, ], 'LexiconSizeExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'ListLexiconsInput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], ], ], 'ListLexiconsOutput' => [ 'type' => 'structure', 'members' => [ 'Lexicons' => [ 'shape' => 'LexiconDescriptionList', ], 'NextToken' => [ 'shape' => 'NextToken', ], ], ], 'ListSpeechSynthesisTasksInput' => [ 'type' => 'structure', 'members' => [ 'MaxResults' => [ 'shape' => 'MaxResults', 'location' => 'querystring', 'locationName' => 'MaxResults', ], 'NextToken' => [ 'shape' => 'NextToken', 'location' => 'querystring', 'locationName' => 'NextToken', ], 'Status' => [ 'shape' => 'TaskStatus', 'location' => 'querystring', 'locationName' => 'Status', ], ], ], 'ListSpeechSynthesisTasksOutput' => [ 'type' => 'structure', 'members' => [ 'NextToken' => [ 'shape' => 'NextToken', ], 'SynthesisTasks' => [ 'shape' => 'SynthesisTasks', ], ], ], 'MarksNotSupportedForFormatException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'MaxLexemeLengthExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'MaxLexiconsNumberExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'MaxResults' => [ 'type' => 'integer', 'max' => 100, 'min' => 1, ], 'NextToken' => [ 'type' => 'string', 'max' => 4096, 'min' => 0, ], 'OutputFormat' => [ 'type' => 'string', 'enum' => [ 'json', 'mp3', 'ogg_vorbis', 'pcm', ], ], 'OutputS3BucketName' => [ 'type' => 'string', 'pattern' => '^[a-z0-9][\\.\\-a-z0-9]{1,61}[a-z0-9]$', ], 'OutputS3KeyPrefix' => [ 'type' => 'string', 'pattern' => '^[0-9a-zA-Z\\/\\!\\-_\\.\\*\\\'\\(\\)]{0,800}$', ], 'OutputUri' => [ 'type' => 'string', ], 'PutLexiconInput' => [ 'type' => 'structure', 'required' => [ 'Name', 'Content', ], 'members' => [ 'Name' => [ 'shape' => 'LexiconName', 'location' => 'uri', 'locationName' => 'LexiconName', ], 'Content' => [ 'shape' => 'LexiconContent', ], ], ], 'PutLexiconOutput' => [ 'type' => 'structure', 'members' => [], ], 'RequestCharacters' => [ 'type' => 'integer', ], 'SampleRate' => [ 'type' => 'string', ], 'ServiceFailureException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 500, ], 'exception' => true, 'fault' => true, ], 'Size' => [ 'type' => 'integer', ], 'SnsTopicArn' => [ 'type' => 'string', 'pattern' => '^arn:aws(-(cn|iso(-b)?|us-gov))?:sns:[a-z0-9_-]{1,50}:\\d{12}:[a-zA-Z0-9_-]{1,256}$', ], 'SpeechMarkType' => [ 'type' => 'string', 'enum' => [ 'sentence', 'ssml', 'viseme', 'word', ], ], 'SpeechMarkTypeList' => [ 'type' => 'list', 'member' => [ 'shape' => 'SpeechMarkType', ], 'max' => 4, ], 'SsmlMarksNotSupportedForTextTypeException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'StartSpeechSynthesisTaskInput' => [ 'type' => 'structure', 'required' => [ 'OutputFormat', 'OutputS3BucketName', 'Text', 'VoiceId', ], 'members' => [ 'LexiconNames' => [ 'shape' => 'LexiconNameList', ], 'OutputFormat' => [ 'shape' => 'OutputFormat', ], 'OutputS3BucketName' => [ 'shape' => 'OutputS3BucketName', ], 'OutputS3KeyPrefix' => [ 'shape' => 'OutputS3KeyPrefix', ], 'SampleRate' => [ 'shape' => 'SampleRate', ], 'SnsTopicArn' => [ 'shape' => 'SnsTopicArn', ], 'SpeechMarkTypes' => [ 'shape' => 'SpeechMarkTypeList', ], 'Text' => [ 'shape' => 'Text', ], 'TextType' => [ 'shape' => 'TextType', ], 'VoiceId' => [ 'shape' => 'VoiceId', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'StartSpeechSynthesisTaskOutput' => [ 'type' => 'structure', 'members' => [ 'SynthesisTask' => [ 'shape' => 'SynthesisTask', ], ], ], 'SynthesisTask' => [ 'type' => 'structure', 'members' => [ 'TaskId' => [ 'shape' => 'TaskId', ], 'TaskStatus' => [ 'shape' => 'TaskStatus', ], 'TaskStatusReason' => [ 'shape' => 'TaskStatusReason', ], 'OutputUri' => [ 'shape' => 'OutputUri', ], 'CreationTime' => [ 'shape' => 'DateTime', ], 'RequestCharacters' => [ 'shape' => 'RequestCharacters', ], 'SnsTopicArn' => [ 'shape' => 'SnsTopicArn', ], 'LexiconNames' => [ 'shape' => 'LexiconNameList', ], 'OutputFormat' => [ 'shape' => 'OutputFormat', ], 'SampleRate' => [ 'shape' => 'SampleRate', ], 'SpeechMarkTypes' => [ 'shape' => 'SpeechMarkTypeList', ], 'TextType' => [ 'shape' => 'TextType', ], 'VoiceId' => [ 'shape' => 'VoiceId', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'SynthesisTaskNotFoundException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'SynthesisTasks' => [ 'type' => 'list', 'member' => [ 'shape' => 'SynthesisTask', ], ], 'SynthesizeSpeechInput' => [ 'type' => 'structure', 'required' => [ 'OutputFormat', 'Text', 'VoiceId', ], 'members' => [ 'LexiconNames' => [ 'shape' => 'LexiconNameList', ], 'OutputFormat' => [ 'shape' => 'OutputFormat', ], 'SampleRate' => [ 'shape' => 'SampleRate', ], 'SpeechMarkTypes' => [ 'shape' => 'SpeechMarkTypeList', ], 'Text' => [ 'shape' => 'Text', ], 'TextType' => [ 'shape' => 'TextType', ], 'VoiceId' => [ 'shape' => 'VoiceId', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], ], ], 'SynthesizeSpeechOutput' => [ 'type' => 'structure', 'members' => [ 'AudioStream' => [ 'shape' => 'AudioStream', ], 'ContentType' => [ 'shape' => 'ContentType', 'location' => 'header', 'locationName' => 'Content-Type', ], 'RequestCharacters' => [ 'shape' => 'RequestCharacters', 'location' => 'header', 'locationName' => 'x-amzn-RequestCharacters', ], ], 'payload' => 'AudioStream', ], 'TaskId' => [ 'type' => 'string', 'pattern' => '^[a-zA-Z0-9_-]{1,100}$', ], 'TaskStatus' => [ 'type' => 'string', 'enum' => [ 'scheduled', 'inProgress', 'completed', 'failed', ], ], 'TaskStatusReason' => [ 'type' => 'string', ], 'Text' => [ 'type' => 'string', ], 'TextLengthExceededException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'TextType' => [ 'type' => 'string', 'enum' => [ 'ssml', 'text', ], ], 'UnsupportedPlsAlphabetException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'UnsupportedPlsLanguageException' => [ 'type' => 'structure', 'members' => [ 'message' => [ 'shape' => 'ErrorMessage', ], ], 'error' => [ 'httpStatusCode' => 400, ], 'exception' => true, ], 'Voice' => [ 'type' => 'structure', 'members' => [ 'Gender' => [ 'shape' => 'Gender', ], 'Id' => [ 'shape' => 'VoiceId', ], 'LanguageCode' => [ 'shape' => 'LanguageCode', ], 'LanguageName' => [ 'shape' => 'LanguageName', ], 'Name' => [ 'shape' => 'VoiceName', ], 'AdditionalLanguageCodes' => [ 'shape' => 'LanguageCodeList', ], ], ], 'VoiceId' => [ 'type' => 'string', 'enum' => [ 'Aditi', 'Amy', 'Astrid', 'Bianca', 'Brian', 'Carla', 'Carmen', 'Celine', 'Chantal', 'Conchita', 'Cristiano', 'Dora', 'Emma', 'Enrique', 'Ewa', 'Filiz', 'Geraint', 'Giorgio', 'Gwyneth', 'Hans', 'Ines', 'Ivy', 'Jacek', 'Jan', 'Joanna', 'Joey', 'Justin', 'Karl', 'Kendra', 'Kimberly', 'Lea', 'Liv', 'Lotte', 'Lucia', 'Mads', 'Maja', 'Marlene', 'Mathieu', 'Matthew', 'Maxim', 'Mia', 'Miguel', 'Mizuki', 'Naja', 'Nicole', 'Penelope', 'Raveena', 'Ricardo', 'Ruben', 'Russell', 'Salli', 'Seoyeon', 'Takumi', 'Tatyana', 'Vicki', 'Vitoria', 'Zeina', 'Zhiyu', ], ], 'VoiceList' => [ 'type' => 'list', 'member' => [ 'shape' => 'Voice', ], ], 'VoiceName' => [ 'type' => 'string', ], ],];
