using Microsoft.AspNetCore.Mvc;

namespace FirstMVCApplication.Controllers
{
    public class PageController : Controller
    {
        public string Index()
        {
            return "This is my 1st page!";
        }
    }
}
