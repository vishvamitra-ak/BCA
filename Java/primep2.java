//BCA V SEM JAVA LAB PROG - 2//
import java.io.*;
class primep2
{
     public static void main(String arg[])
     {
        int i,j,n;
        try
        {
           System.out.println("N="+arg[0]);
           n=Integer.parseInt(arg[0]);
           System.out.println("prime series of "+n+"is");
           for(j=2;j<=n;j++)
           {
             int flag=0;
             for(i=2;i<=j/2;i++)
             {             
                if(j%i==0)
                  flag=1;
             }
             if(flag==0)
             {
                System.out.println(j);
             }
           }
         }
         catch(Exception e)
         {
           System.out.println(e);
         }
     }
}
