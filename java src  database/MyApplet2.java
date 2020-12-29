package pack3; 
import java.applet.Applet;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
/* <applet code="A1.java" width="600" height="450"> </applet> */
public class MyApplet2 extends Applet
{
    Label l1,l2,l3;
    TextField t1,t2;
    Button button;
    @Override
    public void init()
    {
        l1=new Label("First no ");
        l2=new Label("Second no ");
        l3=new Label();
        t1=new TextField();
        t2=new TextField();
        button=new Button("Add");  
        add(l1);
        add(l2);
        add(l3);
        add(t1);
        add(t2);   
        add(button);
        setLayout(null);
        l1.setBounds(30,50,100,20);
        l2.setBounds(30,80,100,20);
        t1.setBounds(150,50,100,20);
        t2.setBounds(150,80,100,20); 
        button.setBounds(80,120,80,20);
        l3.setBounds(80,170,80,20);
        
        button.addActionListener(new myHandler());
    } 
    class myHandler implements ActionListener
    {
        @Override
        public void actionPerformed (ActionEvent e)
        {
            int a=Integer.parseInt(t1.getText());
            int b=Integer.parseInt(t2.getText());
            int c=a+b; 
            l3.setText("sum of no ="+c);
        }
    }
}