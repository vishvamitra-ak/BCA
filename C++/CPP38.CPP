#include<iostream.h>
#include<conio.h>
class c2;
class c1
{
	int a;
public:
	c1(int x)
	{
		a=x;
	}
	friend void swap(c1,c2);
};
class c2
{
	int b;
public:
	c2(int x)
	{
		b=x;
	}
	friend void swap(c1,c2);
};
void swap(c1 x,c2 y)
{
	int t;
	cout<<"Before Swapping\n"<<"a= "<<x.a<<" b= "<<y.b<<endl;
	t=x.a;
	x.a=y.b;
	y.b=t;
	cout<<"After Swapping\n"<<"a= "<<x.a<<" b= "<<y.b<<endl;
}
void main()
{
	clrscr();
	c1 m(10);
	c2 n(20);
	swap(m,n);
	getch();
}