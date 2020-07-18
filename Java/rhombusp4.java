//BCA V SEM JAVA LAB PROG - 4//
import java.io.DataInputStream;
class rhombusp4
{
  public static void main(String args[])
  {
     DataInputStream ob=new DataInputStream(System.in);
     int i,j,k,n=0;
     try
     {
        System.out.println("enter the value of n");
        n=Integer.parseInt(ob.readLine());
     }
     catch(Exception e)
     {
     }
     System.out.println("n="+n);
     for(i=1;i<=n;i++)
     {
        for(j=i;j<n;j++)
        {
           System.out.print(" ");
        }
        for(j=1;j<=i;j++)
        {                       
           System.out.print(" *");
        }
        System.out.println(" ");
     }
     for(i=n-1;i>=1;i--)
     {
        for(j=i;j<n;j++)
        {
           System.out.print(" ");
        }
        for(j=i;j>=1;j--)
        {
           System.out.print(" *");
        }
        System.out.println(" ");
     }
  }
}
       




