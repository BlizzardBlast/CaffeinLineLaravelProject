@extends('layouts.mainlayout')

@section('title', 'Caffein Line | Hubungi Kami')

@section('container-content')
    <div class="formulir">
        <form name="booking">
            <table>
                <tr>
                    <td><label for="nama">Nama Lengkap</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="nama" id="nama" size="100" placeholder="Masukkan nama lengkap Anda..."></div></td>
                </tr>
                <tr>
                    <td><label for="email">Email</label></td>
                    <td> : </td>
                    <td><div style="width: 100%;"><input type="text" name="email" id="email" size="100" placeholder="Contoh: example@gmail.com"></div></td>
                </tr>
                <tr>
                    <td><label for="pesan">Pesan</label></td>
                    <td> : </td>
                    <td style="width: 100%;"><div style="width: 100%;"><textarea name="pesan" id="pesan" rows="20" style="height: 20%;"></textarea></div></td>
                </tr>
                <tr>
                    <td colspan="3" style="color: red;">
                        <span id="errMsg" style="display: none;">Error Message</span>
                    </td>
                </tr>
                <tr>
                    <td><input type="button" value="Kirim Pesan" onclick="checkValidation()"></td>
                    <td></td>
                    <td><input type="reset" value="Reset" style="float: left;"></td>
                </tr>
            </table>
        </form>
    </div>
@endsection
