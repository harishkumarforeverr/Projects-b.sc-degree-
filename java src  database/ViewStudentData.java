 
package pack3;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.SQLException;
import java.sql.Statement;
import java.sql.ResultSet;
class Student
{
    int rollno;
    String sname;
}
class studentDao
{
    public Student getStudent(int rollno)
    {
        String Query1="com.mysql.cj.jdbc.Driver";
        String url="jdbc:mysql://localhost:3306/tmysql?useTimezone=true&serverTimezone=UTC";
        String Query="select ename from emp where empno="+rollno;
        Student student=new Student();
        student.rollno=rollno;
        try
        {
        Class.forName(Query1);
            System.out.println("class is loaded successfully ");
        Connection con=DriverManager.getConnection(url,"root","");
            System.out.println("connection is successsfully loaded ");
         Statement statement = con.createStatement();
         ResultSet rs=statement.executeQuery(Query);
         rs.next();
         student.sname=rs.getString("ename");
         return student;
        }
        catch(ClassNotFoundException ex)
        {
            System.out.println("class is not loaded and error msg = "+ex.getMessage());
        }
        catch(SQLException ex)
        {
            System.out.println(" connection is failed ");
        }
        return null;
    }
}
public class ViewStudentData {
    public static void main(String[] args) {
        studentDao sd=new studentDao();
        Student s1=sd.getStudent(3);
        System.out.println("student data = "+s1.sname); 
    }
            
}
