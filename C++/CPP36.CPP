#include<iostream.h>
#include<conio.h>
class complex
{
	float x,y;
public:
	complex(){}
	complex(float a)
	{
		x=a;
	}
	complex(float,float);
	friend complex calc(complex,complex);
	void disp(complex);
};
complex::complex(float m,float n)
{
	x=m;y=n;
}
complex calc (complex c1,complex c2)
{
	complex c3;
	c3.x=c1.x+c2.x;
	c3.y=c1.y+c2.y;
	return (c3);
}
void complex::disp(complex z)
{
	cout<<z.x<<" + i "<<z.y<<endl;
}
main()
{
	clrscr();
	complex obj1,obj2(10.5,0),obj3(20.5,30.5);
	obj1=calc (obj2,obj3);
	cout<<"Obj2= ";
	obj2.disp(obj2);
	cout<<"Obj3= ";
	obj3.disp(obj3);
	cout<<"Obj1= ";
	obj1.disp(obj1);
	getch();
}
