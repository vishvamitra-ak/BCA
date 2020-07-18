/*                                                                           
<applet code="appletparamp11" width=400 height=300>
<param name="String" value="">
</applet>
*/
import java.awt.*;       
import java.applet.*;
import java.awt.event.*;
public class appletparamp11 extends Applet
{ 
   String Str;
   public void init ()
   {  
      Str=getParameter("String");
      if(Str==null)
      Str="Guest";
      Str=Str+"welcome";
   }
   public void paint(Graphics g)
   {
      g.drawString(Str,20,100);
   }
}
