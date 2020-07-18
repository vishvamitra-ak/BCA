//BCA V SEM JAVA LAB PROG - 7//
import java.io.*;
class gfigareap7
{
   public static void main(String args[])
   {
      geofig g=new geofig(11.35,8.3);
      rectangle r=new rectangle(28.37,61.10);
      triangle t=new triangle(19.12,77.11);
      geofig f;
      f=r;
      System.out.println("Area="+f.area());
      f=t;
      System.out.println("Area="+f.area());
      f=g;
      System.out.println("Area="+f.area());
   }
}

class geofig
{
   double dim1,dim2;
   geofig(double a,double b)
   {
      dim1=a;
      dim2=b;
   }
   double area()
   {
      System.out.println("\nArea cannot be found");
      return(0);             
   }
}
class rectangle extends geofig
{
   rectangle(double a,double b)
   {
      super(a,b);
   }
   double area()
   {
      System.out.println("Area of rectangle");
      return dim1*dim2;
   }
}

class triangle extends geofig
{
   triangle(double a,double b)
   {
      super(a,b);
   }
   double area()
   {
      System.out.println("Area of triangle");
      return dim1*dim2/2;
   }
}

