package pack3; 

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class Oracleps {
    public static void main(String[] args) {
     String url,username,password;
     url="jdbc:oracle:thin:@localhost:1521:XE";
     password="harish";
     username="harish";
     try{
     Class.forName("oracle.jdbc.driver.OracleDriver");
         System.out.println(" Driver is loaded sucessfully ");
         Connection con=DriverManager.getConnection(url,username,password);
         System.out.println(" connection is established sucessfully ");
         con.close();
     }
     catch(ClassNotFoundException ex)
     {
         System.out.println(" Driver is not loaded ");
     }
     catch(SQLException ex)
     {
         System.out.println("connections is failed to establish ");
     }
    }
    
}
