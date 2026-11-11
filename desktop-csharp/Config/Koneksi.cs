using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using MySql.Data.MySqlClient;

namespace desktop_csharp.Config
{
    internal class Koneksi
    {
        public static MySqlConnection GetConnection()
        {
            string konfig = "serve=localhost;user=root;password=;database=db_pp_sekolah_xii";
            MySqlConnection koneksi = new MySqlConnection(konfig);
            try
            {
             koneksi.Open();
             return koneksi;
            }
            catch (MySqlException ex)
            {
                Console.WriteLine("Error" + ex.Message);
                return null;
            }
            finally
            {
                koneksi.Open();
            }
        }
    }
}
