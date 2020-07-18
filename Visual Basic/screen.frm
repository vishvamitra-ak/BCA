VERSION 5.00
Begin VB.Form Form5 
   Caption         =   "Form1"
   ClientHeight    =   8760
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   15480
   LinkTopic       =   "Form1"
   ScaleHeight     =   8760
   ScaleWidth      =   15480
   StartUpPosition =   3  'Windows Default
   Begin VB.Timer Timer2 
      Interval        =   1
      Left            =   2760
      Top             =   1320
   End
   Begin VB.Timer Timer1 
      Interval        =   50
      Left            =   1800
      Top             =   1320
   End
End
Attribute VB_Name = "Form5"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim X As Integer

Private Sub Form_MouseDown(Button As Integer, Shift As Integer, X As Single, Y As Single)
    Unload Me
End Sub

Private Sub Timer1_Timer()
    Form1.Visible = True
End Sub

Private Sub Timer2_Timer()
    Form1.Circle (Form1.Width / 2, Form1.Height / 2), X, RGB(Rnd() * 255, Rnd() * 255, Rnd() * 255)
    X = X + 8
    If X > Form1.Height Then
        Form1.Cls
    End If
End Sub
