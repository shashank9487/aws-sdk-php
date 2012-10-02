<?php
return array (
    'name' => 'glacier',
    'apiVersion' => '2012-06-01',
    'operations' => array(
        'AbortMultipartUpload' => array(
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'array',
            'responseType' => 'primitive',
            'responseNotes' => 'The result of this operation will be an empty array',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'uploadId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'CompleteMultipartUpload' => array(
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ArchiveCreationOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'uploadId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'archiveSize' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-archive-size',
                ),
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'CreateVault' => array(
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'CreateVaultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
                array(
                    'class' => 'LimitExceededException',
                ),
            ),
        ),
        'DeleteArchive' => array(
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/archives/{archiveId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'array',
            'responseType' => 'primitive',
            'responseNotes' => 'The result of this operation will be an empty array',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'archiveId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'DeleteVault' => array(
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'array',
            'responseType' => 'primitive',
            'responseNotes' => 'The result of this operation will be an empty array',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'DeleteVaultNotifications' => array(
            'httpMethod' => 'DELETE',
            'uri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'array',
            'responseType' => 'primitive',
            'responseNotes' => 'The result of this operation will be an empty array',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'DescribeJob' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GlacierJobDescription',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'jobId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'DescribeVault' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'DescribeVaultOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'GetJobOutput' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs/{jobId}/output',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetJobOutputOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'jobId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'range' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Range',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'GetVaultNotifications' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'GetVaultNotificationsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'InitiateJob' => array(
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'InitiateJobOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'Format' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Type' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'ArchiveId' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Description' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'SNSTopic' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'InitiateMultipartUpload' => array(
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'InitiateMultipartUploadOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'archiveDescription' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-archive-description',
                ),
                'partSize' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-part-size',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'ListJobs' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/jobs',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListJobsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'limit' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'marker' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'statuscode' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'completed' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'ListMultipartUploads' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListMultipartUploadsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'uploadIdMarker' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'limit' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'ListParts' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListPartsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'uploadId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'marker' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'limit' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'ListVaults' => array(
            'httpMethod' => 'GET',
            'uri' => '/{accountId}/vaults',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ListVaultsOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'marker' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
                'limit' => array(
                    'type' => 'string',
                    'location' => 'query',
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'SetVaultNotifications' => array(
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/vaults/{vaultName}/notification-configuration',
            'class' => 'Aws\\Common\\Command\\JsonCommand',
            'responseClass' => 'array',
            'responseType' => 'primitive',
            'responseNotes' => 'The result of this operation will be an empty array',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'SNSTopic' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Events' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'type' => 'string',
                    ),
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'UploadArchive' => array(
            'httpMethod' => 'POST',
            'uri' => '/{accountId}/vaults/{vaultName}/archives',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'ArchiveCreationOutput',
            'responseType' => 'model',
            'parameters' => array(
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'archiveDescription' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-archive-description',
                ),
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
                'body' => array(
                    'type' => array(
                        'string',
                        'object',
                    ),
                    'location' => 'body',
                ),
                'command.use_expect' => array(
                    'static' => true,
                    'default' => true,
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'RequestTimeoutException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
        'UploadMultipartPart' => array(
            'httpMethod' => 'PUT',
            'uri' => '/{accountId}/vaults/{vaultName}/multipart-uploads/{uploadId}',
            'class' => 'Guzzle\\Service\\Command\\OperationCommand',
            'responseClass' => 'UploadMultipartPartOutput',
            'responseType' => 'model',
            'parameters' => array(
                'accountId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'vaultName' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'uploadId' => array(
                    'required' => true,
                    'type' => 'string',
                    'location' => 'uri',
                ),
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
                'range' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Content-Range',
                ),
                'body' => array(
                    'type' => array(
                        'string',
                        'object',
                    ),
                    'location' => 'body',
                ),
                'command.use_expect' => array(
                    'static' => true,
                    'default' => true,
                ),
            ),
            'errorResponses' => array(
                array(
                    'class' => 'ResourceNotFoundException',
                ),
                array(
                    'class' => 'InvalidParameterValueException',
                ),
                array(
                    'class' => 'MissingParameterValueException',
                ),
                array(
                    'class' => 'RequestTimeoutException',
                ),
                array(
                    'class' => 'ServiceUnavailableException',
                ),
            ),
        ),
    ),
    'models' => array(
        'ArchiveCreationOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'location' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Location',
                ),
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
                'archiveId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-archive-id',
                ),
            ),
        ),
        'CreateVaultOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'location' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Location',
                ),
            ),
        ),
        'GlacierJobDescription' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'JobId' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'JobDescription' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Action' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'ArchiveId' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'VaultARN' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'CreationDate' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Completed' => array(
                    'type' => 'boolean',
                    'location' => 'json',
                    'filters' => array(
                        'Aws\\Common\\Command\\Filters::booleanString',
                    ),
                ),
                'StatusCode' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'StatusMessage' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'ArchiveSizeInBytes' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'InventorySizeInBytes' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'SNSTopic' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'CompletionDate' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'SHA256TreeHash' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'DescribeVaultOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'VaultARN' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'VaultName' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'CreationDate' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'LastInventoryDate' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'NumberOfArchives' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'SizeInBytes' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
            ),
        ),
        'GetJobOutputOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'body' => array(
                    'type' => 'string',
                    'location' => 'body',
                ),
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
                'status' => array(
                    'type' => 'numeric',
                    'location' => 'http_status',
                ),
                'contentRange' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Content-Range',
                ),
                'acceptRanges' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Accept-Ranges',
                ),
                'contentType' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Content-Type',
                ),
                'archiveDescription' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-archive-description',
                ),
            ),
        ),
        'GetVaultNotificationsOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'vaultNotificationConfig' => array(
                    'type' => 'object',
                    'location' => 'json',
                    'properties' => array(
                        'SNSTopic' => array(
                            'type' => 'string',
                        ),
                        'Events' => array(
                            'type' => 'array',
                            'items' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'InitiateJobOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'location' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Location',
                ),
                'jobId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-job-id',
                ),
            ),
        ),
        'InitiateMultipartUploadOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'location' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'Location',
                ),
                'uploadId' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-multipart-upload-id',
                ),
            ),
        ),
        'ListJobsOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'JobList' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'type' => 'object',
                        'properties' => array(
                            'JobId' => array(
                                'type' => 'string',
                            ),
                            'JobDescription' => array(
                                'type' => 'string',
                            ),
                            'Action' => array(
                                'type' => 'string',
                            ),
                            'ArchiveId' => array(
                                'type' => 'string',
                            ),
                            'VaultARN' => array(
                                'type' => 'string',
                            ),
                            'CreationDate' => array(
                                'type' => 'string',
                            ),
                            'Completed' => array(
                                'type' => 'boolean',
                                'filters' => array(
                                    'Aws\\Common\\Command\\Filters::booleanString',
                                ),
                            ),
                            'StatusCode' => array(
                                'type' => 'string',
                            ),
                            'StatusMessage' => array(
                                'type' => 'string',
                            ),
                            'ArchiveSizeInBytes' => array(
                                'type' => 'numeric',
                            ),
                            'InventorySizeInBytes' => array(
                                'type' => 'numeric',
                            ),
                            'SNSTopic' => array(
                                'type' => 'string',
                            ),
                            'CompletionDate' => array(
                                'type' => 'string',
                            ),
                            'SHA256TreeHash' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'Marker' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListMultipartUploadsOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'UploadsList' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'type' => 'object',
                        'properties' => array(
                            'MultipartUploadId' => array(
                                'type' => 'string',
                            ),
                            'VaultARN' => array(
                                'type' => 'string',
                            ),
                            'ArchiveDescription' => array(
                                'type' => 'string',
                            ),
                            'PartSizeInBytes' => array(
                                'type' => 'numeric',
                            ),
                            'CreationDate' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'Marker' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListPartsOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'MultipartUploadId' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'VaultARN' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'ArchiveDescription' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'PartSizeInBytes' => array(
                    'type' => 'numeric',
                    'location' => 'json',
                ),
                'CreationDate' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
                'Parts' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'type' => 'object',
                        'properties' => array(
                            'RangeInBytes' => array(
                                'type' => 'string',
                            ),
                            'SHA256TreeHash' => array(
                                'type' => 'string',
                            ),
                        ),
                    ),
                ),
                'Marker' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'ListVaultsOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'VaultList' => array(
                    'type' => 'array',
                    'location' => 'json',
                    'items' => array(
                        'type' => 'object',
                        'properties' => array(
                            'VaultARN' => array(
                                'type' => 'string',
                            ),
                            'VaultName' => array(
                                'type' => 'string',
                            ),
                            'CreationDate' => array(
                                'type' => 'string',
                            ),
                            'LastInventoryDate' => array(
                                'type' => 'string',
                            ),
                            'NumberOfArchives' => array(
                                'type' => 'numeric',
                            ),
                            'SizeInBytes' => array(
                                'type' => 'numeric',
                            ),
                        ),
                    ),
                ),
                'Marker' => array(
                    'type' => 'string',
                    'location' => 'json',
                ),
            ),
        ),
        'UploadMultipartPartOutput' => array(
            'type' => 'object',
            'additionalProperties' => true,
            'properties' => array(
                'checksum' => array(
                    'type' => 'string',
                    'location' => 'header',
                    'rename' => 'x-amz-sha256-tree-hash',
                ),
            ),
        ),
    ),
);