/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Clases;

import Utils.conexionMYSQL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.Statement;

/**
 *
 * @author Programer
 */
public class AlumnosDB {
    
    //funcion para consultar
    public ResultSet consultar(){
        Connection cn = null;
        
        cn = conexionMYSQL.getConexion();
        
        Statement sentencia = null;
        
        ResultSet datos = null;
        //Intentamos la consulta
        try{
            //Creamos la sentencia
            sentencia = cn.createStatement();
            
            datos = sentencia.executeQuery("SELECT * FROM alumno");
        }catch(Exception e){
            System.out.println(e);
        }
        return datos;
    }
    
}
