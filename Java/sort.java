import java.io.*;
class sort
{
    public static void main(String args[])
    {
        DataInputStream in=new DataInputStream(System.in);
        int a[]=new int[10];
        int n=0,i,j,temp;
        try
        {
            System.out.println("Enter n");
            n=Integer.parseInt(in.readLine());
            System.out.println("Enter array elements");
            for(i=0;i<n;i++)
                a[i]=Integer.parseInt(in.readLine());
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
            System.out.print(a[i]+" ");
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
        System.out.println();
        System.out.println("Elements in descending order");
        for(i=0;i<n;i++)
            System.out.print(a[i]+" ");
    }
}
