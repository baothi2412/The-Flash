<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>{{ $title }} <small>{{ $subTitle }}</small></h2>
                <ul class="header-dropdown dropdown">
                    
                    <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg gradient">
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                        </ul>
                    </li> 
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table js-basic-example dataTable spacing5">
                        <thead>
                            <tr>
                                @foreach ($columnsName as $column)
                                    @if ($column != 'password' && $column != 'created_at' && $column != 'updated_at')
                                        <th>{{ $column }}</th>
                                    @endif
                                @endforeach
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                @foreach ($columnsName as $column)
                                    @if ($column != 'password' && $column != 'created_at' && $column != 'updated_at')
                                        <th>{{ $column }}</th>
                                    @endif
                                @endforeach
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($records as $record)
                                <tr>
                                    @foreach ($columnsName as $column)
                                        @if ($column != 'password' && $column != 'created_at' && $column != 'updated_at')
                                            <td>{{ $record[$column] }}</td>
                                        @endif
                                    @endforeach
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>