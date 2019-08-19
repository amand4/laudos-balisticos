<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Laudo extends Model
{
    protected $fillable = [
        'oficio', 'rep', 'data_designacao', 'data_solicitacao',
        'secao_id', 'cidade_id', 'solicitante_id' ,'perito_id',
        'diretor_id', 'indiciado', 'inquerito'
    ];

    public function secao()
    {
        return $this->belongsTo(Secao::class);
    }

    public function cidade()
    {
        return $this->belongsTo(Cidade::class);
    }

    public function perito()
    {
        return $this->belongsTo(User::class, 'perito_id', 'id');
    }

    public function diretor()
    {
        return $this->belongsTo(Diretor::class);
    }

    public function solicitante()
    {
        return $this->belongsTo(OrgaoSolicitante::class);
    }

    public function armas()
    {
        return $this->hasMany(Arma::class);
    }

    /**
     * Local Scope utilizado para filtrar a categoria da Marca
     * (Arma ou Munição)
     *
     * @param $query
     * @param $categoria
     * @return mixed
     */
    public function scopeFindMyReps($query, $perito)
    {
        return $query->where('perito_id', $perito)
            ->orderBy('created_at')
            ->paginate(10);
    }
}
