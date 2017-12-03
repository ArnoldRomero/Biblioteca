<?php
    function Guardar_Tipo(){
        if($_POST['txt_id2'] && $_POST['txt_nombre2'] )
    {
        
        $obj= new Tipo();

        $obj->setIdTipo($_POST['txt_id2']);
        $obj->setNombre($_POST['txt_nombre2']);
      
        if ($obj->Guardar())
            echo "Tipo Guardada..!!!";
        else
            echo "Error al guardar la Tipo";
    }
    else
        echo "Es obligatorio el la sigla y nombre!!!";

    }

    function Modificar_Tipo()
    {
        if($_POST['txt_nombre2'])
        {
            $obj= new Tipo();

            $obj->setIdTipo($_POST['txt_id2']);
            $obj->setNombre($_POST['txt_nombre2']);
     
            if ($obj->Modificar())
                echo "Tipo modificada..!!!";
            else
                echo "Error al modificar la Tipo..!!!";      
        }
        else
            echo "El nombre es obligatorio...!!!";
    }

    function Eliminar_Tipo()
    {
        if($_POST['txt_id2'])
        {
            $obj= new Persona();
            $obj->setIdPersona($_POST['txt_id2']);     
            if ($obj->Eliminar())
                echo "Tipo eliminada";
            else
                echo "Error al eliminar la Tipo";        
        }
        else    
            echo "para eliminar debe tener el codigo de la materia..!!!";   
    }

?>