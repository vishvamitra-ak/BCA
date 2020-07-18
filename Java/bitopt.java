import java.io.*;
class bitopt
{
  public static void main(String args[])
  {
    DataInputStream in = new DataInputStream(System.in);
    try
    {
      System.out.println("Enter 1st number");
      int a=Integer.parseInt(in.readLine());
      System.out.println("Enter 2nd number");
      int b=Integer.parseInt(in.readLine());
      int c=a*b;
      int d=a/b;
      int e=a^b;
      int f=~a;
      int g=a<<2;
      int h=b>>2;
      System.out.println("a= "+a+" b= "+b);
      System.out.println("AND op a&b= "+c);
      System.out.println("OR op a/b= "+d);
      System.out.println("XOR op a= "+e);
      System.out.println("Complement ~a= "+f);
      System.out.println("Left Shift a<<< "+g);
      System.out.println("Right shift b>>> "+h);
    }
    catch(Exception e)
    {
      System.out.println(e);
    }
  }
}
