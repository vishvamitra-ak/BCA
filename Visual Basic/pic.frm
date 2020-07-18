VERSION 5.00
Begin VB.Form Form9 
   Caption         =   "Form1"
   ClientHeight    =   7560
   ClientLeft      =   60
   ClientTop       =   450
   ClientWidth     =   15450
   LinkTopic       =   "Form1"
   ScaleHeight     =   7560
   ScaleWidth      =   15450
   StartUpPosition =   3  'Windows Default
   Begin VB.Timer Timer1 
      Interval        =   500
      Left            =   1080
      Top             =   6240
   End
   Begin VB.CommandButton Command7 
      Caption         =   "Exit"
      Height          =   495
      Left            =   9960
      TabIndex        =   7
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command6 
      Caption         =   "Stop"
      Height          =   495
      Left            =   8400
      TabIndex        =   6
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command5 
      Caption         =   "Start"
      Height          =   495
      Left            =   6840
      TabIndex        =   5
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command4 
      Caption         =   "Right"
      Height          =   495
      Left            =   5280
      TabIndex        =   4
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command3 
      Caption         =   "Left"
      Height          =   495
      Left            =   3720
      TabIndex        =   3
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command2 
      Caption         =   "Bottom"
      Height          =   495
      Left            =   2160
      TabIndex        =   2
      Top             =   5400
      Width           =   1215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "Top"
      Height          =   495
      Left            =   600
      TabIndex        =   1
      Top             =   5400
      Width           =   1215
   End
   Begin VB.PictureBox pic 
      Height          =   4335
      Left            =   3960
      Picture         =   "pic.frx":0000
      ScaleHeight     =   4275
      ScaleWidth      =   7755
      TabIndex        =   0
      Top             =   240
      Width           =   7815
   End
End
Attribute VB_Name = "Form9"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim mov As Variant

Private Sub Command1_Click()
mov = "top"
pic.Top = pic.Top - 25
End Sub

Private Sub Command2_Click()
mov = "bottom"
pic.Top = pic.Top + 25
End Sub

Private Sub Command3_Click()
mov = "left"
pic.Left = pic.Left - 25
End Sub

Private Sub Command4_Click()
mov = "right"
pic.Left = pic.Left + 25
End Sub

Private Sub Command5_Click()
Timer1.Interval = 1
End Sub

Private Sub Command6_Click()
Timer1.Interval = 0
End Sub

Private Sub Command7_Click()
End
End Sub

Private Sub Timer1_Timer()
If mov = "top" Then
pic.Top = pic.Top - 25
ElseIf mov = "bottom" Then
pic.Top = pic.Top + 25
ElseIf mov = "left" Then
pic.Left = pic.Left - 25
ElseIf mov = "right" Then
pic.Left = pic.Left + 25
End If
If pic.Top > Form1.Height Then
pic.Top = 0
End If
If pic.Left > Form1.Width Then
pic.Left = 0
End If
If pic.Left = Form1.Width Then
End If
If pic.Top < 0 Then
pic.Top = Form1.Height
End If
End Sub
