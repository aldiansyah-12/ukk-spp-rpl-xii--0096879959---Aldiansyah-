using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;
using MySql.Data.MySqlClient;

namespace desktop_csharp.Views
{
    public partial class FormLogin : Form
    {
        string konfig = "serve=localhost;user=root;password=;database=db_pp_sekolah_xii";
        public FormLogin()
        {
            InitializeComponent();
            this.StartPosition = FormStartPosition.CenterScreen;
            this.AcceptButton = new System.Windows.Forms.Button();
        }

        private void linkLabel1_LinkClicked(object sender, LinkLabelLinkClickedEventArgs e)
        {
            FormRegisterPetugas formRegisterPetugas = new FormRegisterPetugas();
            formRegisterPetugas.Show();

            FormLogin lengit = new FormLogin();
            this.Hide();
        }

        private void FormLogin_Load(object sender, EventArgs e)
        {
        }

        private void button2_Click(object sender, EventArgs e)
        {
            string Username = txtUsername.Text;
            string Password = txtPassword.Text;  

            if(string.IsNullOrEmpty(Username) || string.IsNullOrEmpty(Password))
            {
                MessageBox.Show("Username dan Password tidak boleh kosong","error", MessageBoxButtons.OK, MessageBoxIcon.Warning);
                txtUsername.Focus();
                return;
            }
            else
            {
                
            }
          
            FormRegisterPetugas formRegisterPetugas = new FormRegisterPetugas();
            this.Hide();
        }

        private void btnBatal_Click(object sender, EventArgs e)
        {
            this.Close();
        }
    }
}
