package pack3;
import java.sql.Statement;
import java.sql.Connection;
import java.lang.ClassNotFoundException;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.ResultSet;
import java.sql.PreparedStatement;
class Student1
{
    int rollno;
    String name; 
}
class studentDao1
{ 
//    String Query1="com.mysql.cj.jdbc.Driver";
//        String url="jdbc:mysql://localhost:3306/tmysql?useTimezone=true&serverTimezone=UTC";
    Connection con=null;
    String username="root";
    String password="";
    String url="jdbc:mysql://localhost:3306/tmysql?useTimezone=true&serverTimezone=UTC";
    public void connect()
    { 
        try
        {
        Class.forName("com.mysql.cj.jdbc.Driver");
            System.out.println("driver is connected ");
         con=DriverManager.getConnection(url, username, password);
            System.out.println("connection is connnected ");
        }
        catch(ClassNotFoundException ex)
        {
            System.out.println("Driver is not loaded and error nessage = "+ex.getMessage());
        }
        catch(SQLException ex)
        {
            System.out.println("connection is failed ");
        }
        
    }
    public Student1 getStudent(int rollno )
    {
          String Query ="select ename from emp where empno = "+rollno;
          Student1 s1=new Student1();
          s1.rollno=rollno;
          try{
          Statement statement=con.createStatement();
          ResultSet rs=statement.executeQuery(Query);
          rs.next();
          s1.name=rs.getString("ename");
          return s1;
          }
          catch(SQLException ex){
            System.out.println("statement is failed to insert");
          }
          
        return null;
    }
    public void addStudent(Student1 s)
    {
        String Query="insert into emp values(?,?);";
        try{
        PreparedStatement ps=con.prepareStatement(Query);
        ps.setInt(1,s.rollno);
        ps.setString(2,s.name);
        int n=ps.executeUpdate();
        if(n==1)
        {
            System.out.println("record is insert sucessfully ");
        }
        }
        catch(SQLException ex){
            System.out.println("prepared statement is afiled to insert ");
          }
        
    }
}
public class InsertStudentData {
    public static void main(String[] args) {
        studentDao1 dao=new studentDao1();
        Student1 s1=new Student1();
        s1.name="iiitbasara";
        s1.rollno=2018;
        dao.connect();
        dao.addStudent(s1);
        Student1 s2=dao.getStudent(4);
        System.out.println("student data = "+s2.name);
    }
}

