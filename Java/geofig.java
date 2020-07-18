import java.io.*;
class garia
{
	public static void main(String args[])
	{
		geofig g=new geofig(11.35,8.3);
		rectangle r=new rectangle(28.37,61.01);
		triangle t=new triangle(19.12,77.11);
		geofig f;
		f=r;
		System.out.println("Area of Rectangle="+f.area());
		f=t;
		System.out.println("Area of triangle="+f.area());
		f=g;
		System.out.println("Area of geofig="+f.area());
	}
}
class geofig
{
	double dim1,dim2;
	getfig(double dim1,dim2);
	{
		dim1=a;
		dim2=b;
	}
	double area()
	{
		System.out.println("\nArea can not be found");
		return(0);
	}
}
class rectangle extends geofig
{
	rectangle(double a,double b)
	{
		super(a,b);
	}
	double area()
	{
		System.out.println("Area of rectangle");
	}
}
class triangle extends geofig
{
	triangle(double a,double b)
	{
		super(a,b);
	}
	double area()
	{
		System.out.println("Area of triangle");
		return dim*dim2/2;
	}
}