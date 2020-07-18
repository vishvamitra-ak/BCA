VERSION 5.00
Begin VB.Form Form6 
   Caption         =   "Form1"
   ClientHeight    =   3090
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   7635
   LinkTopic       =   "Form1"
   ScaleHeight     =   3090
   ScaleWidth      =   7635
   StartUpPosition =   3  'Windows Default
   Begin VB.CommandButton Command1 
      Caption         =   "Exit"
      Height          =   495
      Left            =   3120
      TabIndex        =   1
      Top             =   2280
      Width           =   1215
   End
   Begin VB.Timer Timer1 
      Interval        =   50
      Left            =   3240
      Top             =   1320
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      AutoSize        =   -1  'True
      Caption         =   "Welcome To Visual Basic"
      BeginProperty Font 
         Name            =   "MS Sans Serif"
         Size            =   18
         Charset         =   0
         Weight          =   400
         Underline       =   0   'False
         Italic          =   0   'False
         Strikethrough   =   0   'False
      EndProperty
      Height          =   435
      Left            =   1605
      TabIndex        =   0
      Top             =   480
      Width           =   4125
   End
End
Attribute VB_Name = "Form6"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub Command1_Click()
End
End Sub
Private Sub Timer1_Timer()
Label1.Left = Label1.Left + 50
If Label1.Left >= Form1.Width Then
Label1.Left = 0
End If
Label1.Top = Label1.Top + 50
If Label1.Top >= Form1.Height Then
Label1.Top = 0
End If
Label1.ForeColor = RGB(Rnd() * 255, Rnd() * 255, Rnd() * 255)
End Sub
