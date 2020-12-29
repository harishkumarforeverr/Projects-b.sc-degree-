//package pack1;
//import java.awt.*;
//import java.applet.Applet;
//import java.util.Calendar;
//import java.util.GregorianCalendar;
//public class TimeApplet extends Applet implements Runnable
//{
//    Thread t1,t;
//    @Override
//    public void start()
//    {
//        t=new Thread(this);
//        t.start();
//    }
//    @Override
//    public void run()
//    { 
//        try {
//            t1=Thread.currentThread();
//            while(t==t1)
//                repaint();
//            t1.sleep(1000);
//        } catch (InterruptedException ex) {
//            System.out.println("unabale to stop the cuuretthread "+ex.getMessage()); 
//        }
//    }
//    @Override
//    public void paint(Graphics g)
//    {
//        Calendar cal=new GregorianCalendar();
//        String hour,min,sec;
//        hour=String.valueOf(cal.get(Calendar.HOUR));
//        min=String.valueOf(cal.get(Calendar.MINUTE));
//        sec=String.valueOf(cal.get(Calendar.SECOND));
//        g.drawString("horur : "+hour+" \n min : "+min+" sec : "+sec,20,20); 
//    }
//} 
package pack3;

import java.applet.Applet;
import java.awt.Graphics;
import java.util.Calendar;
import java.util.GregorianCalendar; 

public class TimeApplet extends Applet implements Runnable
{
    Thread t1,t2;
    @Override
    public void start()
    {
        t1=new Thread(this);
        t1.start(); 
    }
    @Override
    public void run()
    {
        t2=Thread.currentThread();
        while(t1==t2)
        {
            repaint(); 
            try {
            t2.sleep(1000);
            } catch (InterruptedException ex) {
                 System.out.println(" exception in Thread ");
            }
        }
    }
    @Override
    public void paint(Graphics G)
    {
        Calendar cal=new GregorianCalendar();
        String hour=String.valueOf(cal.get(Calendar.HOUR));
        String min=String.valueOf(cal.get(Calendar.MINUTE));
        String sec=String.valueOf(cal.get(Calendar.SECOND));
        G.drawString(hour+"hr "+min+"m "+sec+" s", 30, 35);
    }
}