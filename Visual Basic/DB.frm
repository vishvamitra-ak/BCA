VERSION 5.00
Begin VB.Form Form12 
   Caption         =   "Form1"
   ClientHeight    =   5235
   ClientLeft      =   5340
   ClientTop       =   3225
   ClientWidth     =   9060
   LinkTopic       =   "Form1"
   ScaleHeight     =   5235
   ScaleWidth      =   9060
   Begin VB.Data Data1 
      Caption         =   "Data1"
      Connect         =   "Access"
      DatabaseName    =   "D:\3rd sem lab\VB\db.mdb"
      DefaultCursorType=   0  'DefaultCursor
      DefaultType     =   2  'UseODBC
      Exclusive       =   0   'False
      Height          =   420
      Left            =   2760
      Options         =   0
      ReadOnly        =   0   'False
      RecordsetType   =   1  'Dynaset
      RecordSource    =   "db"
      Top             =   4440
      Width           =   2535
   End
   Begin VB.CommandButton cmdreset 
      Caption         =   "RESET"
      Height          =   495
      Left            =   5760
      TabIndex        =   13
      Top             =   2760
      Width           =   1215
   End
   Begin VB.CommandButton cmdexit 
      Caption         =   "EXIT"
      Height          =   495
      Left            =   3960
      TabIndex        =   12
      Top             =   3480
      Width           =   1215
   End
   Begin VB.CommandButton cmdlast 
      Caption         =   "LAST"
      Height          =   495
      Left            =   2400
      TabIndex        =   11
      Top             =   3480
      Width           =   1215
   End
   Begin VB.CommandButton cmdnxt 
      Caption         =   "NEXT"
      Height          =   495
      Left            =   840
      TabIndex        =   10
      Top             =   3480
      Width           =   1215
   End
   Begin VB.CommandButton cmdprev 
      Caption         =   "PREVIOUS"
      Height          =   495
      Left            =   3960
      TabIndex        =   9
      Top             =   2760
      Width           =   1215
   End
   Begin VB.CommandButton cmdfirst 
      Caption         =   "FIRST"
      Height          =   495
      Left            =   2400
      TabIndex        =   8
      Top             =   2760
      Width           =   1215
   End
   Begin VB.CommandButton cmdsrch 
      Caption         =   "SEARCH"
      Height          =   495
      Left            =   840
      TabIndex        =   7
      Top             =   2760
      Width           =   1215
   End
   Begin VB.CommandButton cmdupd 
      Caption         =   "UPDATE"
      Height          =   495
      Left            =   3960
      TabIndex        =   6
      Top             =   2040
      Width           =   1215
   End
   Begin VB.CommandButton cmddel 
      Caption         =   "DELETE"
      Height          =   495
      Left            =   2400
      TabIndex        =   5
      Top             =   2040
      Width           =   1215
   End
   Begin VB.CommandButton cmdadd 
      Caption         =   "ADD"
      Height          =   495
      Left            =   840
      TabIndex        =   4
      Top             =   2040
      Width           =   1215
   End
   Begin VB.TextBox Text2 
      DataField       =   "Rno"
      DataSource      =   "Data1"
      Height          =   495
      Left            =   1680
      TabIndex        =   3
      Top             =   840
      Width           =   2055
   End
   Begin VB.TextBox Text1 
      DataField       =   "Name"
      DataSource      =   "Data1"
      Height          =   495
      Left            =   1680
      TabIndex        =   2
      Top             =   120
      Width           =   2055
   End
   Begin VB.Label Label2 
      Alignment       =   2  'Center
      Caption         =   "R.No."
      Height          =   495
      Left            =   120
      TabIndex        =   1
      Top             =   840
      Width           =   1215
   End
   Begin VB.Label Label1 
      Alignment       =   2  'Center
      Caption         =   "Name"
      Height          =   495
      Left            =   120
      TabIndex        =   0
      Top             =   120
      Width           =   1215
   End
End
Attribute VB_Name = "Form12"
Attribute VB_GlobalNameSpace = False
Attribute VB_Creatable = False
Attribute VB_PredeclaredId = True
Attribute VB_Exposed = False
Private Sub cmdadd_Click()
Data1.Recordset.AddNew
Text1.SetFocus
End Sub

Private Sub cmddel_Click()
On Error Resume Next
Data1.Recordset.Delete
Data1.Recordset.MoveNext
If Data1.Recordset.EOF = True Then
Data1.Recordset.MovePrevious
End If
End Sub

Private Sub cmdexit_Click()
End
End Sub

Private Sub cmdfirst_Click()
Data1.Recordset.MoveFirst
End Sub

Private Sub cmdlast_Click()
Data1.Recordset.MoveLast
End Sub

Private Sub cmdnxt_Click()
Data1.Recordset.MoveNext
If Data1.Recordset.EOF = True Then
MsgBox "You are in the last record"
Data1.Recordset.MoveLast
End If
End Sub

Private Sub cmdprev_Click()
Data1.Recordset.MovePrevious
If Data1.Recordset.BOF = True Then
MsgBox "You Are on the first record"
Data1.Recordset.MoveFirst
End If
End Sub

Private Sub cmdreset_Click()
Text1.Text = ""
Text2.Text = ""
End Sub

Private Sub cmdsrch_Click()
Dim s As String
Dim m As Integer
m = Val(InputBox("Enter the number"))
s = "Rno=" & m
Data1.Recordset.FindFirst (s)
If Data1.Recordset.NoMatch Then
MsgBox "Match Not Found"
Else
MsgBox "Search Successful"
End If
End Sub

Private Sub cmdupd_Click()
Data1.Recordset.Edit
Data1.Recordset.CancelUpdate
End Sub
