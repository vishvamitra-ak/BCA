/*<Applet code="MovingBallp13" height=200 width=400></Applet>*/
import java.awt.*;
import java.applet.*;
public class MovingBallp13 extends Applet implements Runnable
{
   Thread t=null;
   int pos=0;
   public void start()
   {
      setBackground(Color.white);
      t=new Thread(this);
      t.start();
   }
   public void run()
   {
      while(true)
      {
         for(pos=0;pos<getSize().width;pos+=10)
         {
            repaint();
            try
            {
              t.sleep(900);
            }
            catch(Exception e)
            {
            }
         }
      }
   }
   public void stop()
   {
        t.stop();
        t=null;
   }
   public void paint(Graphics g)
   {
        g.setColor(Color.blue);
        g.fillOval(pos,50,30,30);
        g.setColor(Color.orange);
        g.fillOval(10,pos,30,30);
        g.setColor(Color.cyan);
        g.fillOval(pos+30,pos+30,30,30);
   }
 
}
