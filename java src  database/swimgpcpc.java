package pack1;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;
/*<applet code="B1" width="600" height="600"> </applet> */
class B1 extends JFrame
{
	JLabel l1,l2,l3,l4;
	JTextField t1,t2;
	JButton button;
	public B1()
	{}
	public B1(String str)
	{
		super(str);
	}
	public void setComponents()
	{
		l1=new JLabel("Addition of Two numbers ");
		l2=new JLabel("First no");
		l3=new JLabel("Second no");
		l4=new JLabel();
		t1=new JTextField();
		t2=new JTextField(); 
		button=new JButton("Add");
		add(l1);
		add(l2);
		add(t1);
		add(l3);
		add(t2);
		add(button);
		add(l4); 
                setLayout(null);
                l1.setBounds(50,50,200,20);
                l2.setBounds(50,80,100,20);
                t1.setBounds(150,80,100,20);
                t2.setBounds(150,100,100,20);
                l3.setBounds(50,100,100,20);
                button.setBounds(80,140,100,20);
                l4.setBounds(100,170,200,20); 
                button.addActionListener(new myHandler());
	}
        class myHandler implements ActionListener
        {
           // public void actionPerformed(ActionEvent e); 
            @Override
            public void actionPerformed(ActionEvent e)
            {
                Integer a=Integer.parseInt(t1.getText());
                Integer b=Integer.parseInt(t2.getText()); 
                Integer c=a+b;
                l4.setText("sum of "+a+" and "+b+" = "+c);
            }
 
        }
	public static void main(String [] args)
	{
	B1 jf=new B1("Harish");
	jf.setVisible(true);
	jf.setSize(600,600);
	jf.setComponents(); 
	jf.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);   
        }  
}
//package pack3;
//import java.awt.event.ActionEvent;
//import java.awt.event.ActionListener;
//import javax.swing.*;
//public class A1 extends JFrame
//{ 
//    public A1(String name)
//    {
//        super(name);
//   }
//    JLabel l1,l2,l3,l4;
//    JButton button;
//    JTextField t1,t2;
//    public void setComponents()
//    {
//        l1=new JLabel("Addition of Two numbers ");
//        l2=new JLabel("First no ");
//        l3=new JLabel("Second no "); 
//        l4=new JLabel();
//        button=new JButton(" ADD ");
//        t1=new JTextField();
//        t2=new JTextField();
//        add(l1);
//        add(l2);
//        add(l3);
//        add(l4);
//        add(t1);
//        add(t2);
//        add(button);
//        setLayout(null);
//        l1.setBounds(50,50,200,20);
//        l2.setBounds(30,80,200,20);
//        l3.setBounds(30,100,200,20);
//        t1.setBounds(150,80, 100, 20); 
//        t2.setBounds(150,100, 100, 20); 
//        button.setBounds(70,130,100,20);
//        l4.setBounds(60,150,100,20);
//        button.addActionListener(new myHandler());
//    }
//    public class myHandler implements ActionListener
//    {
//        @Override
//        public void actionPerformed(ActionEvent e)
//        {
//           int a=Integer.parseInt(t1.getText());
//           int b=Integer.parseInt(t2.getText());
//           int c=a+b;
//           l4.setText("OUTPUT : "+c);
//        }
// 
//    }
//    public static void main(String[] args) {        
//          A1 jf=new A1("Harish Kumar Forever");
//          jf.setVisible(true);
//          jf.setSize(600,600);
//          jf.setComponents();
//          jf.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
//    }
//}
