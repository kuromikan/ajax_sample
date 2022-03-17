<?php
require_once '../model/index.php';

class Ajaxsample_Controller_Index
{
    public function jsAjax($inputText)
    {
        $modelIndex = new Ajaxsample_Model_Index;
        $indexData = $modelIndex->fetchAllByInput($inputText);
        if (empty($indexData)) {
            return ['success' => false];
        } else {
            return ['success' => true, 'data' => $indexData];
        }
    }

    public function jqIdAjax($inputText)
    {
        $modelIndex = new Ajaxsample_Model_Index;
        $indexData = $modelIndex->fetchAllByInput($inputText);
        if (empty($indexData)) {
            return ['success' => false];
        } else {
            return ['success' => true, 'data' => $indexData];
        }
    }

    public function jqFormAjax($inputText)
    {
        $modelIndex = new Ajaxsample_Model_Index;
        $indexData = $modelIndex->fetchAllByInput($inputText);
        if (empty($indexData)) {
            return ['success' => false];
        } else {
            return ['success' => true, 'data' => $indexData];
        }
    }
}

$request = $_REQUEST;
if (!isset($request['method']) || !isset($request['inputText']) || $request['method'] == '' || $request['inputText'] == '') {
    echo json_encode(['success' => false], JSON_UNESCAPED_UNICODE);
    exit();
}
try {
    $controllerIndex = new Ajaxsample_Controller_Index;
    switch ($request['method']) {
        case 'jsAjax':
            $data = $controllerIndex->jsAjax($request['inputText']);
            break;
        case 'jqIdAjax':
            $data = $controllerIndex->jqIdAjax($request['inputText']);
            break;
        case 'jqFormAjax':
            $data = $controllerIndex->jqFormAjax($request['inputText']);
            break;
        default:
            echo json_encode(['success' => false], JSON_UNESCAPED_UNICODE);
            exit();
    }
    echo json_encode($data, JSON_UNESCAPED_UNICODE);
    exit();
} catch (Exception $e) {
    echo json_encode(['success' => false], JSON_UNESCAPED_UNICODE);
    exit();
}
?>