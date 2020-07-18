import java.applet.Applet;
import java.awt.*;
import java.awt.event.*;
import java.applet.*;
import java.applet.Applet.*;
import java.io.*;
/*<applet code="mouseEventdemop14" width=600 height=400></applet>*/
public class mouseEventdemop14 extends Applet implements MouseListener, MouseMotionListener
{
   String msg="";
   int mousex;
   int mousey;
   public void init()
   {
      addMouseListener(this);
      addMouseMotionListener(this);
   }
   public void mouseClicked(MouseEvent e)
   {
      mousex=0;
      mousey=10;
      msg+="Mouse clicked";
      repaint();
   }
   public void mousePressed(MouseEvent e)
   {
      mousex=0;
      mousey=0;
      msg+="Mouse Pressed";
      repaint();
   }
   public void mouseReleased(MouseEvent e)
   {
      mousex=0;
      mousey=0;
      msg+="Mouse released";
      repaint();
   }
   public void mouseEntered(MouseEvent e)
   {
      mousex=0;
      mousey=0;
      msg+="Mouse entered";
      repaint();        
   }
   public void mouseExited(MouseEvent e)
   {
      mousex=0;
      mousey=0;
      msg+="Mouse exited";
      repaint();
   }
   public void mouseDragged(MouseEvent e)
   {
      mousex=0;
      mousey=0;
      msg+="Mouse dragged";
      showStatus("Dragged mouse A1:"+mousex+","+mousey);
      repaint();
   }                                   
   public void mouseMoved(MouseEvent e)
   {
      showStatus("Moving Mouse A+:"+e.getX()+","+e.getY());
   }

   public void paint(Graphics g)
   {
      g.drawString(msg, mousex, mousey);
   }
}



