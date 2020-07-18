#include<iostream.h>
#include<conio.h>
class simple
{
	float p,t,r;
public:
	getdata(float p1,float t1,float r1)
	{
		p=p1;
		t=t1;
		r=r1;
	}
	putdata()
	{
		float si;
		si=(p*t*r)/100;
		cout<<"SI= "<<si;
	}
};
main()
{
	clrscr();
	simple s;
	s.getdata(10000,2,3);
	s.putdata();
	getch();
}