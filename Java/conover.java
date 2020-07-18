import java.io.*;
import java.lang.*;
class box
{
double width,height,depth;
double box1(double w,double h,double d);
{
width=w;
height=h;                                                                                         
depth=d;
}                                                                            
box()
{
width=-1;
height=-1;
volume=-1;
}
box(double len)
{
width=height=depth=len;
}
box(box b)
{
width=b.width;
height=b.height;
depth=b.depth;
}
double volume()
{
return width*height*depth;
}
}
class conover
{
public static void main(string agrs[])
{
box b1=new box(10.2,7.1,5.6);
box b2=new box();
box b3=new box(7.6);
box b4=new box(b1);
System.out.println("value of box is:"+b1.volume());
System.out.println("value of box is:"+b2.volume());
System.out.println("value of box is:"+b3.volume());
System.out.println("value of box is:"+b4.volume());
}
}


