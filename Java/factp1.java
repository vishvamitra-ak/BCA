//BCA V SEM JAVA LAB PROG - 1//
import java.io.*;
class factp1
{
   public static void main(String arg[])
   {
       try
       {
           int i,j;
           int n=arg.length;
           int fact;
           for(i=0;i<n;i++)
           {
               int f=Integer.parseInt(arg[i]);
               fact=1;
               for(j=1;j<=f;j++)
                   fact=fact*j;
               System.out.println(arg[i]+"="+fact);
           }
       }
       
       catch(Exception e)
       {
           System.out.println(e);
       }
   }
}
