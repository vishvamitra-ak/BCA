/*<applet code=studp9 width=400 height=200></applet>*/

import java.awt.*;
import java.awt.event.*;
import java.applet.*;
import java.lang.*;
public class studp9 extends Applet implements ActionListener
{
   String msg1=" ";
   String msg2=" ";
   double tot,s1,pre,s2,s3,s4;
   public TextField txtsub1,txtsub2,txtsub3,txtsub4;
   public void init()
   {
      Label lblName=new Label("Name :",Label.RIGHT);
      Label lblclass=new Label("class:",Label.RIGHT);
      TextField txtname=new TextField(15);
      TextField txtclass=new TextField(8);

      Label lblstudentsmarks=new Label("marks:",Label.RIGHT);
      Label lblsub1=new Label("Sub1:",Label.RIGHT);
      Label lblsub2=new Label("Sub2:",Label.RIGHT);
      Label lblsub3=new Label("Sub3:",Label.RIGHT);
      Label lblsub4=new Label("Sub4:",Label.RIGHT);
      Label lblper=new Label("Total:",Label.RIGHT);

      txtsub1=new TextField(5);
      txtsub2=new TextField(5);
      txtsub3=new TextField(5);
      txtsub4=new TextField(5);

      Button Result=new Button("Result");

      add(lblName);
      add(txtname);
      add(lblclass);
      add(txtclass);
      add(lblsub1);
      add(txtsub1);
      add(lblsub2);
      add(txtsub2);           
      add(lblsub3);
      add(txtsub3);
      add(lblsub4);
      add(txtsub4);
      add(Result);
      Result.addActionListener(this);
   }
   public void actionPerformed(ActionEvent ae)
   {
      int s1,s2,s3,s4,tot;
      double per;
      String str=ae.getActionCommand();
      if(str.equals("Result"))
      {
         s1=Integer.parseInt(txtsub1.getText());
         s2=Integer.parseInt(txtsub2.getText());
         s3=Integer.parseInt(txtsub3.getText());
         s4=Integer.parseInt(txtsub4.getText());
         tot=s1+s2+s3+s4;
         per=tot/4;
         msg1+="Total marks"+tot;
         msg2+="percentage="+per;
         repaint();
      }
    }
    public void paint(Graphics g)
    {
      g.drawString(msg1,10,200);
      g.drawString(msg2,10,250);
    }
}
