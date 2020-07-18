import java.io.*;
import java.lang.*;
class dept
{
   double sal;
   dept()
   {
      try
      {
         DataInputStream in=new DataInputStream(System.in);
         System.out.println("Enter the salary for month");
         sal=Integer.parseInt(in.readLine());
         System.out.println("entered salary:"+sal);
         sal=sal*12;
         System.out.println("Salary for the year="+sal);
      }
      catch(Exception e)
      {
      }
   }
   void bonus()
   {
      double bon=sal*0.2;
      System.out.println("Bonus in superclass="+bon);
   }
   
}   
class subdept extends dept
{
   subdept()
   {
      super();
   }
   
   void bonus()
   {
      double bon=sal*0.15;
      System.out.println("Bonus calculated in subclass is="+bon);
   }
}

class salbonusp10
{
   public static void main(String args[]) throws IOException
   {
      subdept ob=new subdept();
      ob.bonus();
   }
}


