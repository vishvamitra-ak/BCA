import java.io.*;
class A extends Thread
{
    public void run()
    {
        for(int i=1;i<=4;i++)
        {
           System.out.println("it from thread A=i+"+i);
        }
        System.out.println("Exit from A");
    }
}
class B extends Thread
{
    public void run()
    {
        for(int j=1;j<=4;j++)
        {
           System.out.println("It from Thread B=j+"+j);
        }
        System.out.println("Exit from B");
    }
}
class c extends Thread
{
    public void run()
    {
        for(int k=1;k<=4;k++)
        {
           System.out.println("It from Thread C=k+"+k);
        }
        System.out.println("exit from c");
    }
}
public class threadpriorityp12
{
    public static void main(String args[])
    {
       A threadA=new A();
       B threadB=new B();  
       c threadc=new c();
       threadc.setPriority(Thread.MAX_PRIORITY);
       threadA.setPriority(Thread.MIN_PRIORITY);
	   threadB.setPriority(threadA.getPriority()+1);
       System.out.println("start thread A");
       threadA.start();
       System.out.println("start thraed B");
       threadB.start();
       System.out.println("start thread C");
       threadc.start();
       System.out.println("Exit from main thread");
    }
}

