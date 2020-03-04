/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Utils;

import java.sql.Connection;
import java.sql.DriverManager;

/**
 * 
 * @author Omar Toxqui Tolama
 * 
 */
public class conexionMYSQL {

    /**
     * @param args the command line arguments
     */
 
    //Conexion a la base de datos MYSQL
    public static Connection getConexion(){
       Connection conexion = null;
        try{
            Class.forName("com.mysql.jdbc.Driver");
                 
            conexion = DriverManager.getConnection("jdbc:mysql://localhost/escuela","root","");
            
            System.out.println("Conexion Satisfactoria");
            
        }catch(Exception ex){
            System.out.println( "error al conectar"+ ex.getMessage());
        }
        return conexion;
    }
    
    
    public static void main(String[] args) {
        // TODO code application logic here
        getConexion();
    }
    
}
