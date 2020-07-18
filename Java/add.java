import java.io.*;
class add
{
  public static void main(String args[])
  {
    DataInputStream in=new DataInputStream(System.in);
    int a,b;
    System.out.println("Enter a,b");
    a=Integer.parseInt(in.readLine());
    b=Integer.parseInt(in.readLine());
    int c=a+b;
    System.out.println("C="+c);
  }
}

