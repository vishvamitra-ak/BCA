VERSION 5.00
Begin VB.Form Form3 
   Caption         =   "Calculator"
   ClientHeight    =   5745
   ClientLeft      =   7665
   ClientTop       =   4080
   ClientWidth     =   6045
   LinkTopic       =   "Form1"
   ScaleHeight     =   5745
   ScaleWidth      =   6045
   Begin VB.CommandButton Command10 
      Caption         =   "MR"
      Height          =   495
      Left            =   4560
      TabIndex        =   23
      Top             =   4320
      Width           =   1215
   End
   Begin VB.CommandButton Command9 
      Caption         =   "M"
      Height          =   495
      Left            =   3120
      TabIndex        =   22
      Top             =   4320
      Width           =   1215
   End
   Begin VB.CommandButton Command8 
      Caption         =   "M-"
      Height          =   495
      Left            =   1680
      TabIndex        =   21
      Top             =   4320
      Width           =   1215
   End
   Begin VB.CommandButton Command7 
      Caption         =   "M+"
      Height          =   495
      Left            =   240
      TabIndex        =   20
      Top             =   4320
      Width           =   1215
   End
   Begin VB.CommandButton Command6 
      Caption         =   "AC"
      Height          =   495
      Left            =   4560
      TabIndex        =   19
      Top             =   5040
      Width           =   1215
   End
   Begin VB.CommandButton Command5 
      Caption         =   "."
      Height          =   495
      Left            =   3120
      TabIndex        =   18
      Top             =   3480
      Width           =   1215
   End
   Begin VB.CommandButton Command4 
      Caption         =   "C"
      Height          =   495
      Left            =   3120
      TabIndex        =   17
      Top             =   5040
      Width           =   1215
   End
   Begin VB.CommandButton Command3 
      Caption         =   "="
      Height          =   495
      Left            =   1680
      TabIndex        =   16
      Top             =   3480
      Width           =   1215
   End
   Begin VB.CommandButton Command2 
      Caption         =   "+"
      Height          =   495
      Index           =   0
      Left            =   4560
      TabIndex        =   12
      Top             =   960
      Width           =   1215
   End
   Begin VB.CommandButton Command1 
      Caption         =   "1"
      Height          =   495
      Index           =   1
      Left            =   240
      TabIndex        =   2
      Top             =   960
      Width           =   1215
   End
   Begin VB.TextBox Text1 
      Alignment       =   1  'Right Justify
      Height          =   405
      Left            =   240
      TabIndex        =   1
      Text            =   "0"
      Top             =   360
      Width           =   5535
   End
   Begin VB.Frame Frame1 
      Caption         =   "CALCULATOR"
      Height          =   5535
      Left            =   120
      TabIndex        =   0
      Top             =   120
      Width           =   5775
      Begin VB.CommandButton Command2 
         Caption         =   "/"
         Height          =   495
         Index           =   3
         Left            =   4440
         TabIndex        =   15
         Top             =   3360
         Width           =   1215
      End
      Begin VB.CommandButton Command2 
         Caption         =   "*"
         Height          =   495
         Index           =   2
         Left            =   4440
         TabIndex        =   14
         Top             =   2520
         Width           =   1215
      End
      Begin VB.CommandButton Command2 
         Caption         =   "-"
         Height          =   495
         Index           =   1
         Left            =   4440
         TabIndex        =   13
         Top             =   1680
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "0"
         Height          =   495
         Index           =   0
         Left            =   120
         TabIndex        =   11
         Top             =   3360
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "9"
         Height          =   495
         Index           =   9
         Left            =   3000
         TabIndex        =   10
         Top             =   2520
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "8"
         Height          =   495
         Index           =   8
         Left            =   1560
         TabIndex        =   9
         Top             =   2520
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "7"
         Height          =   495
         Index           =   7
         Left            =   120
         TabIndex        =   8
         Top             =   2520
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "6"
         Height          =   495
         Index           =   6
         Left            =   3000
         TabIndex        =   7
         Top             =   1680
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "5"
         Height          =   495
         Index           =   5
         Left            =   1560
         TabIndex        =   6
         Top             =   1680
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "4"
         Height          =   495
         Index           =   4
         Left            =   120
         TabIndex        =   5
         Top             =   1680
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "3"
         Height          =   495
         Index           =   3
         Left            =   3000
         TabIndex        =   4
         Top             =   840
         Width           =   1215
      End
      Begin VB.CommandButton Command1 
         Caption         =   "2"
         Height          =   495
         Index           =   2
         Left            =   1560
         TabIndex        =   3
         Top             =   840
         Width           =   1215
      End
   End
End
Attribute VB_Name = "Form3"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Dim pv, sys As String
Dim m As Integer


Private Sub Command1_Click(Index As Integer)
    If Text1.Text = "0" Then
        Text1.Text = ""
    End If
    If Len(Text1.Text) = 0 And Len(Text1.Text) = 1 Then
        Text1.Text = Command1(Index).Caption
    Else
        Text1.Text = Text1.Text & Command1(Index).Caption
    End If
End Sub

Private Sub Command10_Click()
    m = 0
End Sub

Private Sub Command2_Click(Index As Integer)
    pv = Val(Text1.Text)
    Text1.Text = ""
    If Index = 0 Then
        sys = "+"
    ElseIf Index = 1 Then
        sys = "-"
    ElseIf Index = 2 Then
        sys = "*"
    ElseIf Index = 3 Then
        sys = "/"
    End If
End Sub

Private Sub Command3_Click()
    If sys = "+" Then
        Text1.Text = pv + Val(Text1.Text)
    ElseIf sys = "-" Then
        Text1.Text = pv - Val(Text1.Text)
    ElseIf sys = "*" Then
        Text1.Text = pv * Val(Text1.Text)
    ElseIf sys = "/" Then
        Text1.Text = pv / Val(Text1.Text)
    End If
End Sub

Private Sub Command4_Click()
    Dim i As Variant
    i = Len(Text1.Text)
    If i = 1 Then
        Text1.Text = 0
    Else
        Text1.Text = Left(Text1.Text, i - 1)
    End If
End Sub

Private Sub Command5_Click()
    If InStr(1, Text1.Text, ".") < 1 Then
        Text1.Text = Text1.Text & Command5.Caption
    End If
        
End Sub

Private Sub Command6_Click()
    Text1.Text = "0"
End Sub

Private Sub Command7_Click()
    m = Val(Text1.Text)
End Sub

Private Sub Command8_Click()
    m = m - Val(Text1.Text)
End Sub

Private Sub Command9_Click()
    Text1.Text = m
End Sub
