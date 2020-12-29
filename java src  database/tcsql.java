//package pack1;
// 
//
//import java.sql.Connection;
//import java.sql.DriverManager;
//import java.sql.SQLException;
//public class tcsql {
//    public static void main(String[] args)   
//    {
//        try {
//            String url="jdbc:mysql://localhost:3306/harish?useTimezone=true&serverTimezone=UTC";
//            String username="root";
//            Class.forName("com.mysql.cj.jdbc.Driver");
//            System.out.println("Driver is loadded");
//            Connection con = DriverManager.getConnection(url, "root","");
//            System.out.println("Connection is loaded ");
//        } catch (ClassNotFoundException ex) {
//            System.out.println("Class is not found hari and "+ex.getMessage());
//        } catch (SQLException ex) {
//            System.out.println("connection is not loaded hari and "+ex.getMessage());
//        }
//        }
//}
//

import java.sql.DriverManager;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;
public class tcsql 
{
    public static void main(String[] args) {
    String username="root";
    String password="";
    String str="satish";
    int n=5;
    String url="jdbc:mysql://localhost:3306/tmysql?useTimezone=true&serverTimezone=UTC";
    String Query="insert into emp values(?,?);";
    try
    {
        Class.forName("com.mysql.cj.jdbc.Driver"); 
        System.out.println("class is sucessfullly loaded ");
        Connection con=DriverManager.getConnection(url,username,password);
         System.out.println("connection is loaded successfully ");
        PreparedStatement statement =con.prepareStatement(Query);
        statement.setInt(1, 6);
        statement.setString(2, "archana"); 
        int i=statement.executeUpdate();
        if(i==1)
            System.out.println("record is inserted successfully");
        else
            System.out.println("insertion is failed ");
            
    }
    catch(ClassNotFoundException ex)
    {
        System.out.println("class is failed to loaded and message = "+ex.getMessage()); 
    }
    catch(SQLException ex)
    {
        System.out.println("connection is failed to loaded "+ex.getMessage()); 
    }
    
    
 }
}