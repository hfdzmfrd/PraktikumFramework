<?php

namespace App\Http\Middleware;
use Closure;
class Namamiddleware
{
 /**
 * Handle an incoming request.
 *
 * @param \Illuminate\Http\Request $request
 * @param \Closure $next
 * @return mixed
 */
 public function handle($request, Closure $next)
 {
 if ($request->input('token') !== 'my-secret-token') {
 return redirect('Mahasiswa');
 }
 return $next($request); // artinya jalankan selanjutnya (Closure berikutnya yaitu $nex, dengan parameter $request)
 }
}

