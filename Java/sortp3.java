//BCA V SEM JAVA LAB PROG - 3//
import java.io.*;
class sortp3
{
   public static void main(String args[])
   {
      DataInputStream ab=new DataInputStream(System.in);
      int a[]=new int[10];
      int n=0,i,j,temp;
      try
      {
         System.out.println("enter n");
         n=Integer.parseInt(ab.readLine());
         System.out.println("enter the array elements");
         for(i=0;i<n;i++)
         {
            a[i]=Integer.parseInt(ab.readLine());
         }
      }
      catch(Exception e)
      {
         System.out.println(e);
      }
      for(i=0;i<n;i++)
      {
         for(j=i+1;j<n;j++)
         {
            if(a[i]>a[j])
            {
               temp=a[i];
               a[i]=a[j];
               a[j]=temp;
            }
         }
      }
      System.out.println("Elements in ascending order");
      for(i=0;i<n;i++)
      {
         System.out.println(a[i]);
      }
      for(i=0;i<n;i++)
      {           
         for(j=i+1;j<n;j++)
         {
             if(a[i]<a[j])
             {
                temp=a[i];
                a[i]=a[j];
                a[j]=temp;
             }
         }
      }
      System.out.println("Elements in descending order");
      for(i=0;i<n;i++)
      {
         System.out.println(a[i]);
      }
   }
}











