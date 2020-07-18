import java.applet.Applet;
import java.awt.*;
import java.awt.event.*;
import java.applet.Applet.*;
import java.io.*;
/*<applet code="KeyEdemop15" width=400 height=200></applet>*/

public class KeyEdemop15 extends Applet implements KeyListener
{
    String msg=" ";
    int x=10;
    int y=10;
    public void init()
    {
       addKeyListener(this);
       requestFocus();
    }
    public void keyTyped(KeyEvent e)
    {
       msg+=e.getKeyChar();
       repaint();
    }
    public void keyPressed(KeyEvent e)
    {
       showStatus("KeyPressed");
    }
    public void keyReleased(KeyEvent e)
    {
       showStatus("KeyReleased");
    }
    public void paint(Graphics g)
    {  
       g.drawString(msg,x,y);
    }
}


