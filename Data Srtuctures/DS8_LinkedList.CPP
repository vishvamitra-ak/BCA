//Linked list
#include<stdio.h>
#include<conio.h>
#include<stdlib.h>
#define null 0
struct ll
	{
		int item;
		struct ll *next;
	}; typedef struct ll node;
void create (node *list);
void display (node *list);
int count (node *list);
node *head;
void main()
{
	clrscr();
	//node *head;

	head=(node*)malloc(sizeof (node));
	create(head);
	display(head);

	printf("\nNumber of info in linked list:%d",count(head));
	getch();
}
void create (node *list)
{
	printf("Enter items\nEnter -1 to stop\n");
	scanf ("%d",&list->item);
	if((list->item)==-1)
	{
		list->next=null;
	}
	else
	{
		list->next=(node*) malloc(sizeof(node));
		create (list->next);
	}
}
void display (node *list)
{
	if ((list->next)!=null)
	{
		printf("%d->",list->item);
		display(list->next);
	}
}
int count (node *list)
{
	if(list->next==null)
		return(0);
	else
		return(1+count(list->next));
}
