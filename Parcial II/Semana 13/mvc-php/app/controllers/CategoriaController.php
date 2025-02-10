<?php
require_once __DIR__.'/../services/CategoriaService.php';
require_once __DIR__.'/../../config/database.php';

class CategoriaController{

    private $categoriaService;

    public function __construct(){
        $database = new Database();
        $db = $database->conectar();
        $this->categoriaService = new CategoriaService($db);
    }

    public function index(){
        $result = $this->categoriaService->getAll();
        echo json_encode($result);
    }
    
    public function show($id){
        $result = $this->categoriaService->getById($id);
        if($result ){
            echo json_encode($result);
        }else{
            http_response_code(404);
            echo json_encode(['mensaje'=>'Categoria no encontrada']);
        }
    }
}

?>