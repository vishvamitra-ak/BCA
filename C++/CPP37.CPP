#include<iostream.h>
#include<conio.h>
class complex
{
	int x,y;
public:
	complex(complex &c)
	{
		x=c.x;
		y=c.y;
	}
	complex(int a,int b)
	{
		x=a;y=b;
	}
	void disp(complex);
};
void complex::disp(complex z)
{
	cout<<"x= "<<z.x<<" y ="<<z.y<<endl;
}
main()
{
	clrscr();
	complex o1(10,20),o2(o1);

	o1.disp(o1);
	o2.disp(o2);
	getch();
}
