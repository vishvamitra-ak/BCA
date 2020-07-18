class Box
{
	double width;
	double height;
	double depth;
	
	Box(double w,double h,double d)
	{
		width=w;
		height=h;
		depth=d;
	}
	Box()
	{
		width=-1;
		height=-1;
		depth=-1;
	}
	Box(double len)
	{
		width=height=depth=len;
	}
	Box(Box b)
	{
		width=b.width;
		height=b.height;
		depth=b.depth;
	}
	double volume()
	{
		return width*height*depth;
	}
}
class ConstOver
{
	public static void main(String args[])
	{
		Box b1=new Box(12.10,17.65,16.11);
		Box b2=new Box();
		Box b3=new Box(1.7);
		Box b4=new Box(b1);
		System.out.println("Volume of Box 1 is "+b1.volume());
		System.out.println("Volume of Box 2 is "+b2.volume());
		System.out.println("Volume of Box 3 is "+b3.volume());
		System.out.println("Volume of Box 4 is "+b4.volume());
	}
}