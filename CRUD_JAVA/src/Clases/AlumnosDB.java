/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Clases;

import Utils.conexionMYSQL;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.Statement;

/**
 * @Archivo AlumnosDB.java
 * @author Omar Toxqui Tolama
 * @Descripcion Clase donde se tienen las instrucciones
 * para el CRUD de datos.
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
            
            datos = sentencia.executeQuery("SELECT * FROM alumnos");
        }catch(Exception e){
            System.out.println(e);
        }
        return datos;
    }
    
    
    
    
    //funcion para insertar en la tabla
    public boolean insertar(String Nombre, String Apellidos, int Edad, String Telefono, String Carrera){
        boolean respuesta= false;
        
        Connection cn = null;
        
        cn = conexionMYSQL.getConexion();
        
        PreparedStatement preSentencia;
        
        try{
            //Preparamos la sentencia para la inserción
            preSentencia = cn.prepareStatement("insert into alumnos (nombre,apellidos,edad,telefono,carrera) values (?,?,?,?,?)");
            
            preSentencia.setString(1, Nombre);
            preSentencia.setString(2, Apellidos);
            preSentencia.setInt(3, Edad);
            preSentencia.setString(4, Telefono);
            preSentencia.setString(5, Carrera);
            
            int res = preSentencia.executeUpdate();
            
            if(res==1){
                respuesta = true;
            }else{
                respuesta = false;
            }
        }catch(Exception e){
            System.out.println(e);
        }
        return respuesta;
    }
    
    
    public boolean Actualizar(int Matricula, String Nombre, String Ape, int Edad, String Tel, String Carrera){
        
        boolean respuesta = false;
        
        Connection cn = null;
        
        cn = conexionMYSQL.getConexion();
        PreparedStatement preSentencia;
        // statement = sentencias resultset = datos y PeraredStatement = perar la sentencia
            
        try{
            
            preSentencia = cn.prepareStatement("UPDATE alumnos SET nombre = ?, apellidos = ?, edad = ?, telefono = ?, carrera = ? WHERE matricula = ?");
            
            preSentencia.setString(1, Nombre);
            preSentencia.setString(2, Ape);
            preSentencia.setInt(3, Edad);
            preSentencia.setString(4, Tel);
            preSentencia.setString(5, Carrera);
            preSentencia.setInt(6, Matricula);
            
            int res = preSentencia.executeUpdate();
                        
            if(res==1){
                respuesta = true;
            }else{
                respuesta = false;
            }
            
            
        }catch( Exception  e){
            System.out.println(e);
        }
        return respuesta;
    }
    
    public boolean Eliminar(int matricula){
        boolean respuesta = false;
        
        
        Connection cn = null;
        
        cn = conexionMYSQL.getConexion();
        
        PreparedStatement preSentencia;
        
        try{
            preSentencia = cn.prepareStatement("DELETE FROM alumnos WHERE matricula=?");
            preSentencia.setInt(1, matricula);
            int res = preSentencia.executeUpdate();
            
            if(res== 1){
                respuesta = true;
            }else{
                respuesta = false;
            }
        }catch(Exception e){
            System.out.println(e);
        }
        return respuesta;
    }
}
