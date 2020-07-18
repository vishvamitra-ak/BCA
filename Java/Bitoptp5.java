//BCA V SEM JAVA LAB PROG - 5//
import java.io.*;
class Bitoptp5
{
    public static void main(String args[])
    {
        DataInputStream ob=new DataInputStream(System.in);
        try
        {
           System.out.println("Enter the first number");
           int a=Integer.parseInt(ob.readLine());
           System.out.println("Enter the second number");
           int b=Integer.parseInt(ob.readLine());
           int c=a*b;
           int d=a/b;
           int e=a^b;
           int f=~a;
           int g=a<<2;
           int h=b>>2;         
           System.out.println("a="+a+"/n"+"b="+b);
           System.out.println("AND operation a&b="+c);
           System.out.println("OR operation a/b="+d);
           System.out.println("XOR operation a="+e);
           System.out.println("compliment operation ~a="+f);
           System.out.println("Leftshift operation a<<<="+g);
           System.out.println("Rightshift operation b>>>="+h);
        }
        catch(Exception e)
        {
           System.out.println(e);
        }
    }
}

