package pack3; 

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;

public class mysqlps {
    public static void main(String[] args) {
       String url,username,password;
      url="jdbc:mysql://localhost:3306/harish";//?useTimezone=true&serverTimezone=UTC"; 
      username="root";
      password="";
      try
      {
      Class.forName("com.mysql.cj.jdbc.Driver");
          System.out.println(" Driver is loded sucessfully ");
      Connection con=DriverManager.getConnection(url, username, password); 
          System.out.println(" connection is establisehed sucessfully");
      }
      catch(ClassNotFoundException ex) 
      {
          System.out.println(" driver is failed to loaded ");
      } 
      catch(SQLException ex)
      {
          System.out.println("Connection is failed to loaded ");
      }
    }     
}
