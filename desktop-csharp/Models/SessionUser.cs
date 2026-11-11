using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace desktop_csharp.Models
{
    internal class SessionUser
    {
        public SessionUser(string id_petugas, string username, string password, string level, string isloggedIn)
        {
            this.id_petugas = id_petugas;
            Username = username;
            Password = password;
            this.level = level;
            IsloggedIn = isloggedIn;
        }

      public string id_petugas {  get; set; }
      public string Username { get; set; }
      public string Password { get; set; }
      public string level { get; set; }
      public string IsloggedIn { get; set; }
      
      
    }
}
