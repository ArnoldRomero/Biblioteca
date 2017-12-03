<?php
    function Guardar_Materia(){
        if($_POST['txt_id1'] && $_POST['txt_nombre1'] )
    {
        
        $obj= new Materia();

        $obj->setIdMateria($_POST['txt_id1']);
        $obj->setNombre($_POST['txt_nombre1']);
      
        if ($obj->Guardar())
            echo "Materia Guardada..!!!";
        else
            echo "Error al guardar la Materia";
    }
    else
        echo "Es obligatorio el la sigla y nombre!!!";

    }

    function Modificar_Materia()
    {
        if($_POST['txt_nombre1'])
        {
            $obj= new Materia();

            $obj->setIdMateria($_POST['txt_id1']);
            $obj->setNombre($_POST['txt_nombre1']);
     
            if ($obj->Modificar())
                echo "Materia modificada..!!!";
            else
                echo "Error al modificar la Materia..!!!";      
        }
        else
            echo "El nombre es obligatorio...!!!";
    }

    function Eliminar_Materia()
    {
        if($_POST['txt_id1'])
        {
            $obj= new Persona();
            $obj->setIdPersona($_POST['txt_id1']);     
            if ($obj->eliminar())
                echo "Materia eliminada";
            else
                echo "Error al eliminar la Materia";        
        }
        else    
            echo "para eliminar debe tener el codigo de la materia..!!!";   
    }

?>